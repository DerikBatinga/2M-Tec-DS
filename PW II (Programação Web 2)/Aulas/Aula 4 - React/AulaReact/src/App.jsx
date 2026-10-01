import { useEffect, useState } from "react";

const URL_MAPA =
  "https://raw.githubusercontent.com/johan/world.geo.json/master/countries.geo.json";

const tornados = [
  {
    id: 1,
    local: "Oklahoma, Estados Unidos",
    formato: "Cone",
    velocidade: 120,
    classificacao: "EF2",
    latitude: 35.5,
    longitude: -97.5,
    cor: "#facc15",
  },
  {
    id: 2,
    local: "Santa Catarina, Brasil",
    formato: "Rope (corda)",
    velocidade: 80,
    classificacao: "EF0",
    latitude: -27,
    longitude: -51,
    cor: "#38bdf8",
  },
  {
    id: 3,
    local: "Bangladesh",
    formato: "Wedge (cunha)",
    velocidade: 180,
    classificacao: "EF4",
    latitude: 24,
    longitude: 90,
    cor: "#f87171",
  },
  {
    id: 4,
    local: "Nova Gales do Sul, Austrália",
    formato: "Stovepipe (cilíndrico)",
    velocidade: 150,
    classificacao: "EF3",
    latitude: -32,
    longitude: 147,
    cor: "#fb923c",
  },
];

// Converte longitude e latitude em uma posição no SVG.
// O mapa tem 1000 unidades de largura e 500 de altura.
function coordenadasParaPonto(longitude, latitude) {
  const x = ((longitude + 180) / 360) * 1000;
  const y = ((90 - latitude) / 180) * 500;

  return [x, y];
}

// Transforma os contornos de um país em caminhos para o SVG.
function criarCaminho(geometria) {
  let poligonos = [];

  if (geometria.type === "Polygon") {
    poligonos = [geometria.coordinates];
  } else if (geometria.type === "MultiPolygon") {
    poligonos = geometria.coordinates;
  }

  return poligonos
    .map((poligono) =>
      poligono
        .map((anel) => {
          const pontos = anel.map(([longitude, latitude]) =>
            coordenadasParaPonto(longitude, latitude)
          );

          return (
            pontos
              .map(
                ([x, y], indice) =>
                  `${indice === 0 ? "M" : "L"} ${x} ${y}`
              )
              .join(" ") + " Z"
          );
        })
        .join(" ")
    )
    .join(" ");
}

export default function App() {
  const [paises, setPaises] = useState([]);
  const [selecionado, setSelecionado] = useState(null);
  const [carregando, setCarregando] = useState(true);
  const [erro, setErro] = useState("");

  // Carrega o mapa quando o componente aparece na tela.
  useEffect(() => {
    const controlador = new AbortController();

    async function carregarMapa() {
      try {
        const resposta = await fetch(URL_MAPA, {
          signal: controlador.signal,
        });

        if (!resposta.ok) {
          throw new Error("Falha ao carregar o mapa.");
        }

        const dados = await resposta.json();

        // Calcula os desenhos uma vez, durante o carregamento.
        const contornos = dados.features.map((pais, indice) => ({
          id: pais.id ?? indice,
          caminho: criarCaminho(pais.geometry),
        }));

        setPaises(contornos);
      } catch (erro) {
        if (erro.name !== "AbortError") {
          setErro(
            "Não foi possível carregar o mapa. Verifique sua conexão e recarregue a página."
          );
        }
      } finally {
        if (!controlador.signal.aborted) {
          setCarregando(false);
        }
      }
    }

    carregarMapa();

    return () => controlador.abort();
  }, []);

  return (
    <main className="app">
      <style>{`
        * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
          background: #0b1220;
          color: #e2e8f0;
          font-family: Arial, sans-serif;
        }

        #root {
          width: 100%;
          max-width: none;
          margin: 0;
          padding: 0;
        }

        .app {
          max-width: 1400px;
          margin: auto;
          padding: 32px 20px;
          text-align: left;
        }

        .etiqueta {
          color: #38bdf8;
          font-size: 12px;
          font-weight: bold;
          letter-spacing: 3px;
        }

        h1 {
          margin: 12px 0;
          color: #f8fafc;
          font-size: clamp(28px, 4vw, 44px);
        }

        .introducao, .aviso {
          color: #94a3b8;
          line-height: 1.6;
        }

        .conteudo {
          display: grid;
          grid-template-columns: minmax(0, 3fr) minmax(260px, 1fr);
          gap: 20px;
          margin-top: 26px;
          align-items: start;
        }

        .painel {
          padding: 20px;
          border: 1px solid #29364a;
          border-radius: 16px;
          background: #111c2e;
        }

        .painel h2 {
          margin: 0 0 18px;
          font-size: 20px;
        }

        .mapa {
          display: block;
          width: 100%;
          height: auto;
          border: 1px solid #29364a;
          border-radius: 12px;
          background: #091727;
        }

        .pais {
          fill: #254653;
          stroke: #72949c;
          stroke-width: 0.6;
          stroke-linejoin: round;
        }

        .marcador {
          cursor: pointer;
        }

        .marcador:hover .circulo,
        .marcador:focus .circulo {
          stroke: white;
          stroke-width: 3;
        }

        .lista {
          display: flex;
          flex-wrap: wrap;
          gap: 8px;
          margin-top: 18px;
        }

        .botao {
          padding: 10px 12px;
          border: 1px solid #334155;
          border-radius: 8px;
          background: #18253a;
          color: #e2e8f0;
          font: inherit;
          font-size: 13px;
          cursor: pointer;
        }

        .botao:hover, .botao.ativo {
          border-color: #38bdf8;
          background: #263951;
        }

        .botao:focus-visible {
          outline: 2px solid white;
          outline-offset: 3px;
        }

        .vazio, .mensagem {
          padding: 32px 10px;
          color: #94a3b8;
          text-align: center;
          line-height: 1.7;
        }

        .icone {
          font-size: 48px;
        }

        .selo {
          display: inline-block;
          padding: 8px 14px;
          border-radius: 8px;
          color: #0b1220;
          font-weight: bold;
        }

        .dados {
          margin: 20px 0;
        }

        .dados div {
          padding: 15px 0;
          border-bottom: 1px solid #29364a;
        }

        .dados dt {
          margin-bottom: 8px;
          color: #94a3b8;
          font-size: 13px;
        }

        .dados dd {
          margin: 0;
          font-size: 19px;
          font-weight: bold;
        }

        .aviso {
          margin-top: 20px;
          font-size: 13px;
        }

        @media (max-width: 900px) {
          .conteudo {
            grid-template-columns: 1fr;
          }

          .app {
            padding: 24px 12px;
          }

          .painel {
            padding: 14px;
          }
        }
      `}</style>

      <header>
        <span className="etiqueta">PROJETO • PW II</span>
        <h1>🌪️ Mapa Mundial de Tornados</h1>
        <p className="introducao">
          Clique nos marcadores para explorar as ocorrências simuladas.
        </p>
      </header>

      <div className="conteudo">
        <section className="painel">
          <h2>Ocorrências pelo mundo</h2>

          {carregando ? (
            <p className="mensagem" role="status">
              Carregando mapa-múndi...
            </p>
          ) : erro ? (
            <p className="mensagem" role="alert">
              {erro}
            </p>
          ) : (
            <svg
              className="mapa"
              viewBox="0 0 1000 500"
              role="group"
              aria-label="Mapa-múndi com tornados fictícios selecionáveis"
            >
              {/* Linhas de latitude e longitude */}
              <g stroke="#193044" strokeWidth="1">
                {[-60, -30, 0, 30, 60].map((latitude) => {
                  const [, y] = coordenadasParaPonto(0, latitude);

                  return (
                    <line
                      key={`latitude-${latitude}`}
                      x1="0"
                      y1={y}
                      x2="1000"
                      y2={y}
                    />
                  );
                })}

                {[-120, -60, 0, 60, 120].map((longitude) => {
                  const [x] = coordenadasParaPonto(longitude, 0);

                  return (
                    <line
                      key={`longitude-${longitude}`}
                      x1={x}
                      y1="0"
                      x2={x}
                      y2="500"
                    />
                  );
                })}
              </g>

              {/* Contornos dos países */}
              <g aria-hidden="true">
                {paises.map((pais) => (
                  <path
                    key={pais.id}
                    className="pais"
                    d={pais.caminho}
                    fillRule="evenodd"
                  />
                ))}
              </g>

              {/* Tornados posicionados por coordenadas */}
              {tornados.map((tornado) => {
                const [x, y] = coordenadasParaPonto(
                  tornado.longitude,
                  tornado.latitude
                );

                const ativo = selecionado?.id === tornado.id;

                return (
                  <g
                    key={tornado.id}
                    className="marcador"
                    transform={`translate(${x}, ${y})`}
                    role="button"
                    tabIndex={0}
                    aria-label={`${tornado.local}: ${tornado.classificacao}`}
                    aria-pressed={ativo}
                    onClick={() => setSelecionado(tornado)}
                    onKeyDown={(evento) => {
                      if (
                        evento.key === "Enter" ||
                        evento.key === " "
                      ) {
                        evento.preventDefault();
                        setSelecionado(tornado);
                      }
                    }}
                  >
                    <title>
                      {tornado.local} — {tornado.classificacao}
                    </title>

                    <circle
                      r={ativo ? 27 : 22}
                      fill={tornado.cor}
                      opacity="0.2"
                    />

                    <circle
                      className="circulo"
                      r="15"
                      fill="#0b1220"
                      stroke={tornado.cor}
                      strokeWidth={ativo ? 3 : 2}
                    />

                    <path
                      d="
                        M -8 -7 H 8
                        M -6 -2 H 6
                        M -4 3 H 4
                        M -1 8 H 2
                      "
                      fill="none"
                      stroke={tornado.cor}
                      strokeWidth="2.5"
                      strokeLinecap="round"
                    />

                    <text
                      y="37"
                      textAnchor="middle"
                      fill={tornado.cor}
                      stroke="#0b1220"
                      strokeWidth="3"
                      paintOrder="stroke"
                      fontSize="13"
                      fontWeight="bold"
                    >
                      {tornado.classificacao}
                    </text>
                  </g>
                );
              })}
            </svg>
          )}

          <div className="lista" aria-label="Selecionar tornado">
            {tornados.map((tornado) => (
              <button
                key={tornado.id}
                type="button"
                className={`botao ${
                  selecionado?.id === tornado.id ? "ativo" : ""
                }`}
                aria-pressed={selecionado?.id === tornado.id}
                onClick={() => setSelecionado(tornado)}
              >
                {tornado.local}
              </button>
            ))}
          </div>
        </section>

        <aside className="painel" aria-live="polite">
          <h2>Detalhes do tornado</h2>

          {selecionado ? (
            <>
              <span
                className="selo"
                style={{ backgroundColor: selecionado.cor }}
              >
                {selecionado.classificacao}
              </span>

              <dl className="dados">
                <div>
                  <dt>Localização</dt>
                  <dd>{selecionado.local}</dd>
                </div>

                <div>
                  <dt>Formato</dt>
                  <dd>{selecionado.formato}</dd>
                </div>

                <div>
                  <dt>Velocidade estimada do vento</dt>
                  <dd>{selecionado.velocidade} MPH</dd>
                </div>

                <div>
                  <dt>Classificação EF</dt>
                  <dd>{selecionado.classificacao}</dd>
                </div>
              </dl>

              <button
                type="button"
                className="botao"
                onClick={() => setSelecionado(null)}
              >
                Limpar seleção
              </button>
            </>
          ) : (
            <div className="vazio">
              <div className="icone" aria-hidden="true">
                🌪️
              </div>
              <p>
                Selecione um tornado no mapa ou nos botões para
                consultar seus detalhes.
              </p>
            </div>
          )}
        </aside>
      </div>

      <p className="aviso">
        Atividade educativa com ocorrências fictícias. Não apresenta
        alertas em tempo real. O formato não determina a intensidade:
        a classificação EF é atribuída pela avaliação dos danos.
      </p>
    </main>
  );
}