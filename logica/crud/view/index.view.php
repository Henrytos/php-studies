<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .error {
        color: red;
        font-size: 10px;
        font-weight: 300;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .success {
        width: 100%;
        padding: .5rem .25rem;
        font-size: .75rem;
        color: white;
        background-color: #238855;
        text-align: center;
    }
    </style>
</head>

<body class="antialiased ">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        class="flex flex-col gap-6 w-full max-w-sm">
        <h1 class="text-2xl font-bold">Formulario</h1>
        <div class="flex-col gap-1">
            <div class="flex gap-1 items-center">
                <label class="  " for="name">name:</label>
                <input class="border-1  font-normal border px-1 py-px flex-1 " type="text" id="name" name="name"
                    placeholder="oi" value="<?php if (!$name_error)
                        echo $name; ?>">

            </div>
            <?php if (!empty($name_error)): ?>
            <span class="error">
                <?php echo $name_error; ?>
            </span>
            <?php endif ?>
        </div>

        <div class="flex-col gap-1">
            <div class="flex gap-1 items-center">
                <label class="  " for="email">email:</label>
                <input class="border-1  font-normal border px-1 py-px flex-1 " type="text" id="email" name="email"
                    value="<?php if (!$email_error)
                        echo $email; ?>">

            </div>
            <?php if (!empty($email_error)): ?>
            <span class="error">
                <?php echo $email_error; ?>
            </span>
            <?php endif; ?>
        </div>


        <div class="flex-col gap-1">
            <div class="flex gap-1 items-center">
                <label class="  " for="password">password:</label>
                <input class="border-1  font-normal border px-1 py-px flex-1 " type="text" id="password" name="password"
                    value="<?php if (!$password_error)
                        echo $password; ?>">

            </div>
            <?php if (!empty($password_error)): ?>
            <span class="error">
                <?php echo $password_error; ?>
            </span>
            <?php endif; ?>
        </div>

        <input type="submit" name="submit"
            class="bg-zinc-900 text-white py-1  hover:bg-white hover:text-black border border-black transition-colors cursor-pointer" />
        <?php if ($success_message): ?>
        <span class="success">
            <?php echo $success_message; ?>
        </span>
        <?php endif; ?>
    </form>
</body>

</html>