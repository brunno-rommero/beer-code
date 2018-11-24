<?
# alterar a variavel abaixo colocando o seu email

$destinatario = "brunoromero7@gmail.com";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

 // monta o e-mail na variavel $body
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $body, "From: $email\r\n");
// redireciona para a página de obrigado
//header("location:obrigado.htm");
?>
