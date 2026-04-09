
@Composable
fun DiceWithButtonAndImage( modifier: Modifier = Modifier, .fillMaxSize(), wrapContentSize(Alignment.Center)) {
    var result by remember { mutableStateOf(1) }
    var tentativa by remember { mutableStateOf(1) }
    val imageResource = when(result) {
        1 -> R.drawable.dice_1
        2 -> R.drawable.dice_2
        3 -> R.drawable.dice_3
        4 -> R.drawable.dice_4
        5 -> R.drawable.dice_5
        6 -> R.drawable.dice_6
    }
    
    Column(
        modifier = modifier,
        horizontalAlignment = Alignment.CenterHorizontally
    ) {
        Image(
            painter = painterResource(id = imageResource),
            contentDescription = result.toString()
        )
        Spacer(modifier = Modifier.height(16.dp))

        Text("Insira o valor que você acha que vai cair:")
        TextField(
         value = valorInserido,
            label{(Text("Lado"))}
        )
        if (valorInserido == result){
            Text("Você acertou!")
        }
        else{
            Text("Não foi desta vez")
        }
        Button(
            onClick = { result = (1..6).random() },
        ) {
            Text(
                text = stringResource(id = R.string.roll),
                fontSize = 24.sp
            )
        }
    }
}

fun DiceWithButtonAndImage(modifier: Modifier = Modifier) {
    Column (
        modifier = modifier,
        horizontalAlignment = Alignment.CenterHorizontally
    ) {}
}