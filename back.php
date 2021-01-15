					<?php

					if (isset($_POST['submit']) && isset($_POST["name"])&& isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["subject"])) {
						$to = "houachezacharia@gmail.com";
						$subject = htmlspecialchars($_POST['subject']);
						$message="<html><head></head><body>From: " . htmlspecialchars($_POST['email']) ."\nNom :\n" . htmlspecialchars($_POST['name']) .      "\n\nMessage :\n" .htmlspecialchars($_POST['message']) . "</body></html>";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
						mail($to, $subject, $message, $headers);
					header('Location: index.php');
					}
					?>