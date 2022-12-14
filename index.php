<?php
define('ERROR_REQUIRED', "Champ obligatoire");
define('ERROR_LENGTH', "Caractere min 2");
define('ERROR_MAIL', "Email nom valide");

$errors = [
    'firstname' => '',
    'email' => '',
];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map("trim", $_POST);

    $firstname = $data['firstname'] ?? '';
    $email = $data['email'] ?? '';

    if (empty($firstname)) {
        $errors['firstname'] = ERROR_REQUIRED;
    }
    
    if (strlen($firstname) < 2) {
        $errors['firstname'] = ERROR_LENGTH;
    }
    
    if (empty($email)) {
        $errors['email'] = ERROR_REQUIRED;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ERROR_MAIL;
    }
}


?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/99dc44be9d.js" crossorigin="anonymous"></script>
    <title>Support CV</title>
</head>
<body>
<div class="gridContainer">
    <header>
        <h1 class="name"><span>T</span>oto Toto</h1>
        <p class="stack">Développeur Full stack</p>
    </header>
    <section class="picture">
        <img class="profilPicture" src="./img/portrait.png" alt="An over-stressed wilder">
    </section>
    <aside>
        <div class="block">
            <h2 class="titleSmall">CONTACT</h2>
            <h3 class="titleInfo">Téléphone</h3>
            <p class="texteInfo">01 02 03 04 05</p>
            <h3 class="titleInfo">Email</h3>
            <p class="texteInfo">wilder@gmail.com</p>
            <h3 class="titleInfo">adresse</h3>
            <p class="texteInfo">17 rue Delandine <br/> 69002 Lyon </p>
        </div>
        <div class="block">
            <h2 class="titleSmall">FORMATION</h2>
            <h3 class="titleInfo">Wild Code Shool</h3>
            <p class="texteEducation">Développeur web & mobile 5 mois cursus php/symfony</p>
            <p class="texteDate">Septembre 2022 - Fevrier 2022</p>
        </div>
        <div class="block">
            <h2 class="titleSmall">SKILLS</h2>
            <img class="logoSkill" src="https://via.placeholder.com/70">
            <img class="logoSkill" src="https://via.placeholder.com/70">
            <img class="logoSkill" src="https://via.placeholder.com/70">
            <img class="logoSkill" src="https://via.placeholder.com/70">
            <img class="logoSkill" src="https://via.placeholder.com/70">
            <img class="logoSkill" src="https://via.placeholder.com/70">
        </div>
        <div class="block">
            <h2 class="titleSmall">Langues</h2>
            <h3 class="titleInfo">FRANCAIS</h3>
            <p>Langue maternelle</p>
            <h3 class="titleInfo">ANGLAIS</h3>
            <p>Niveau A1</p>
        </div>
        <div class="block">
            <h2 class="titleSmall">SOCIAL</h2>
            <div class="socialContainer">
                <i class="fab fa-twitter"></i>
                <p>twitter</p>
            </div>
            <div class="socialContainer">
                <i class="fab fa-linkedin"></i>
                <p>linkedin</p>
            </div>
        </div>
    </aside>
    <main>
        <h2 class="titleSmall titleMain">PROFIL PROFESSIONNEL</h2>
        <P class="texteMain">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis eget quam et
            venenatis. Nam iaculis
            ornare felis, eget lobortis ipsum scelerisque vitae. Aliquam sed felis vitae tellus porta viverra quis nec
            arcu. Aliquam tempus ante quis lorem mattis tempus. Sed eget nisl elit. Quisque ut nulla id tellus malesuada
            rutrum. Vestibulum dictum ultrices tortor sit amet consectetur. Integer in vulputate sem. Curabitur in
            placerat ligula. In arcu nisl, scelerisque ac felis quis, venenatis posuere nisi.
            Fusce nec feugiat neque, id pretium elit. Donec maximus vulputate turpis, nec consequat velit finibus nec.
            Quisque eleifend sodales libero vel rhoncus. Vivamus pretium. </P>

        <h2 class="titleSmall titleXp">PROJET PROFESSIONNEL</h2>
        <div class="experience">
            <div class="timeline">2 semaines</div>
            <div class="content">
                <h3>Nom du projet</h3>
                <p class="projectP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis eget quam et
                    venenatis. Nam
                    iaculis ornare felis, eget lobortis ipsum scelerisque vitae. Aliquam sed felis vitae tellus porta
                    viverra quis nec arcu. Aliquam tempus ante quis lorem mattis tempus. Sed eget nisl elit. Quisque ut
                    nulla id tellus malesuada rutrum. Vestibulum dictum ultrices tortor sit amet consectetur. Integer in
                    vulputate sem. Curabitur in placerat ligula. In arcu nisl, scelerisque ac felis quis, venenatis
                    posuere nisi. Fusce nec feugiat neque, id pretium elit. Donec maximus vulputate turpis, nec
                    consequat velit finibus nec. Quisque eleifend sodales libero vel rhoncus. Vivamus pretium. </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
            </div>
        </div>
        <div class="experience">
            <div class="timeline">5 semaines</div>
            <div class="content">
                <h3>Nom du projet</h3>
                <p class="projectP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis eget quam et
                    venenatis. Nam
                    iaculis ornare felis, eget lobortis ipsum scelerisque vitae. Aliquam sed felis vitae tellus porta
                    viverra quis nec arcu. Aliquam tempus ante quis lorem mattis tempus. Sed eget nisl elit. Quisque ut
                    nulla id tellus malesuada rutrum. Vestibulum dictum ultrices tortor sit amet consectetur. Integer in
                    vulputate sem. Curabitur in placerat ligula. In arcu nisl, scelerisque ac felis quis, venenatis
                    posuere nisi. Fusce nec feugiat neque, id pretium elit. Donec maximus vulputate turpis, nec
                    consequat velit finibus nec. Quisque eleifend sodales libero vel rhoncus. Vivamus pretium. </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
            </div>
        </div>
        <div class="experience">
            <div class="timeline">8 semaines</div>
            <div class="content">
                <h3>Nom du projet</h3>
                <p class="projectP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis eget quam et
                    venenatis. Nam
                    iaculis ornare felis, eget lobortis ipsum scelerisque vitae. Aliquam sed felis vitae tellus porta
                    viverra quis nec arcu. Aliquam tempus ante quis lorem mattis tempus. Sed eget nisl elit. Quisque ut
                    nulla id tellus malesuada rutrum. Vestibulum dictum ultrices tortor sit amet consectetur. Integer in
                    vulputate sem. Curabitur in placerat ligula. In arcu nisl, scelerisque ac felis quis, venenatis
                    posuere nisi. Fusce nec feugiat neque, id pretium elit. Donec maximus vulputate turpis, nec
                    consequat velit finibus nec. Quisque eleifend sodales libero vel rhoncus. Vivamus pretium. </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <form method="POST" action="">
            <div>
                <label class="labelFrom" for="firstname">Firstname</label>
                <input class="inputForm" name="firstname" type="text" id="firstname">
                <?php if ($errors['firstname']) {
                    echo '<p>' . $errors['firstname'] . '</P>';
                } else null ?>
            </div>
            <div>
                <label class="labelFrom" for="email">email</label>
                <input class="inputForm" name="email" type="email" id="email">
            </div>
            <button class="buttonForm" type="submit">Envoyer</button>
        </form>
    </footer>
</div>
</body>
</html>