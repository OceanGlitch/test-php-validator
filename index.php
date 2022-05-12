<?php 
        $nombre = "Pikassso";
        $apellido = "Apellido";
        $dni = 17;
        $email = "pikassso@test.com";
    

    // Made by Pikassso
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy un título de la página</title>
    <link rel="stylesheet" href="./assets/app.css">
    <script src='/assets/vendor/vanillaValidator/dist/vanilla-validator.concat.min.js'></script>
</head>
<body>
    <div class="column">
        <div class="w-12 hs-75v gradient-blue justify-content-center align-items-center flex">
            <p class="size-lg-1 text-white text-uppercase letter-1 font-600">
                Comprobaciones
            </p>
        </div>
        <div class="w-12 wrapper">
            <div class="card shadow-2 -mt-10">
                <div class="card-content">
                <form action="done.php" method="post" class="form-inputs" onsubmit="return onSubmit()">
                    <div class="mb-3">
                        <label for="name">Nombre:</label>
                        <input type="text" class="input i-required" name="name" value=<?php echo $nombre ?>>
                    </div>
                    <div class="mb-3">
                        <label for="lastname">Apellido:</label>
                        <input type="text" class="input i-required" name="lastname" value=<?php echo $apellido ?>>
                    </div>
                    <div class="mb-3">
                        <label for="dni">Cédula:</label>
                        <input type="number" class="input i-required min-length" data-min-length="10" data-max-length="11" name="dni" value=<?php echo $dni ?>>
                    </div>
                    <div class="mb-3">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="input i-required" name="email" value=<?php echo $email ?>>
                    </div>
                    <div class="mb-3 center">
                        <button class="secondary button-submit">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        const config = {
            validateOnFieldChanges: true,
            showListOfValidations: true,
            novalidateHTML5: true,
            validationBy: "onsubmit",
            button: ".button-submit",
            selectors: {
                control: "form-inputs",
                required: "i-required",
                error: "i-invalid",
                minLength: "min-length",
                messageError: "invalid-feedback",
                formError: "form-invalid",
                wrapErrors: "my-list-errors-container",
            },
            container: ".form-inputs",
            messages: {
                required: "Required field",
                email: "Invalid email",
                integer: "Needs to be a integer",
                digit: "Only letters and numbers",
                numeric: "Only  numbers",
                pattern: "Needs to matchs pattern",
                phone: "Invalid phone number",
                url: "Invalid url",
                date: "Invalid date",
                currency: "Invalid currency",
                cep: "Invalid cep",
                maxLength: "The amount of characters is greater than allowed",
                minLength: "The amount of characters is less than allowed",
                rangeLength: "The number of characters must be between 3 and 5",
                sameLength: "The value needs to have 5 characters",
                max: "The value needs to be less or equals to 5",
                min: "The value needs to be greater or equals to 3",
                range: "The value needs to be between 3 and 5",
                equalTo: "The value needs to be 10",
                cpf: "Invalid cpf",
                cnpj: "Invalid cnpj",
                cnh: "Invalid cnh",
                creditCard: "Invalid credit card number",
                hasExtension: "Invalid extension detected",
            },
        };

        const onSubmit = () => {
            if ( confirm("¿Quieres continuar?") === false) return false;
            else return true
            
        }

        let validator = new VanillaValidator(config)
        
    </script>
</body>
</html>