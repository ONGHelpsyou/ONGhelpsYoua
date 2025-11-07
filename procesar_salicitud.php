<?php
// ===== CONFIGURA AQUÍ TU CORREO =====
$adminEmail = "nolairbolivia@gmail.com"; // ← pon aquí el correo donde quieres recibir las solicitudes
$fromEmail  = "no-reply@tu-dominio.com";    // ← si tienes dominio, usa uno del mismo dominio

// Recibir datos
$pais            = $_POST["pais"]            ?? "";
$ciudad          = $_POST["ciudad"]          ?? "";
$nombreCompleto  = $_POST["nombreCompleto"]  ?? "";
$apellidoCompleto= $_POST["apellidoCompleto"]?? "";
$fechaNacimiento = $_POST["fechaNacimiento"] ?? "";
$edad            = $_POST["edad"]            ?? "";
$tipoDocumento   = $_POST["tipoDocumento"]   ?? "";
$numeroDocumento = $_POST["numeroDocumento"] ?? "";
$direccion       = $_POST["direccion"]       ?? "";
$telefono        = $_POST["telefono"]        ?? "";
$email           = $_POST["email"]           ?? "";
$mensaje         = $_POST["mensaje"]         ?? "";
$creadoEn        = $_POST["creadoEn"]        ?? "";

// Armar cuerpo
$subject = "Nueva solicitud - USA Helps You";

$body = "Se ha recibido una nueva solicitud:\n\n"
  . "Nombre: $nombreCompleto $apellidoCompleto\n"
  . "País: $pais\n"
  . "Ciudad: $ciudad\n"
  . "Fecha de nacimiento: $fechaNacimiento\n"
  . "Edad: $edad\n"
  . "Tipo de documento: $tipoDocumento\n"
  . "Número de documento: $numeroDocumento\n"
  . "Dirección: $direccion\n"
  . "Teléfono: $telefono\n"
  . "Email de contacto: $email\n"
  . "Comentario: $mensaje\n"
  . "Registrado en: $creadoEn\n";

// Headers
$headers  = "From: USA Helps You <{$fromEmail}>\r\n";
$headers .= "Reply-To: {$fromEmail}\r\n";

// Enviar
if (mail($adminEmail, $subject, $body, $headers)) {
  echo "OK";
} else {
  echo "ERROR_MAIL";
}