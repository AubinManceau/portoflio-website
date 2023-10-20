<?php
session_start();
if(isset($_POST['send'])){
    extract($_POST);
    
    if(isset($lastname) && $lastname != "" &&
       isset($firstname) && $firstname != "" &&
       isset($email) && $email != "" &&
       isset($message) && $message != ""){

       $to = "aubinmanceau0@gmail.com";
       $subject = "Nouveau message de " .$firstname .$lastname;
       
       $message = " 
            <p>Vous avez reçu un nouveau message de <strong>".$email."</strong> depuis votre formulaire de contact</p>
            <p><strong>Nom : </strong> ".$lastname."</p>
            <p><strong>Prénom : </strong> ".$firstname."</p>
            <p><strong>Message : </strong> ".$message."</p>
            ";
       
       // Always set content-type when sending HTML email
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       
       // More headers
       $headers .= 'From: <'.$email.'>' . "\r\n";
       
       $send = mail($to,$subject,$message,$headers);
    
       if($send){
            $_SESSION['succes_message'] = "Votre message a été envoyé avec succès !";
       } else{
            $info = "Un problème est survenue ! Veuillez réessayer.";
       }

    }else{
        $info = "Veuillez remplir tous les champs !";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Aubin Manceau</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./main/main.js" defer></script>
    <script src="https://kit.fontawesome.com/a560869912.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
</head>
<body>
    <header>
        <div class="bgcolor"></div>
        <nav>
            <div class="nameNav">
                <p>Aubin Manceau</p>
            </div>
            <div class="linkNav">
                <ul>
                    <li><a href="#aboutMe">À propos</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="contenuHeader">
            <div class="titreHeader">
                <h1><span class="couleur">Je m'appelle </span> Aubin Manceau <br> <span class="couleur">et je suis </span> Etudiant / Développeur junior.</h1>
            </div>
            <div class="texteHeader">
                <p>J'ai 19 ans et je suis en deuxième année de bachelor en développement web à MyDigitalSchool Angers. Actuellement, je recherche un stage de 40 jours débutant le 25 mars 2024, tout en étant à la recherche d'une alternance pour la rentrée 2024 !</p>
            </div>
            <div class="boutonHeader">
                <a href="#projects">Projets</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="scrollDown">
                <object data="./img/scroll-down.svg" width="100" height="100"> </object>           
            </div>
        </div>
    </header>
    <main>
        <div class="aboutMe" id="aboutMe">
            <div class="imgAbout">
                <img src="./img/about.png" alt="">
            </div>
            <div class="contenuAbout">
                <div class="titreSection">
                    <h2>à propos</h2>
                </div>
                <div class="texteAbout">
                    <p>Je m'appelle Aubin Manceau, et j'ai 19 ans. Je suis actuellement en deuxième année de bachelor en développement web à MyDigitalSchool Angers. La curiosité et l'autonomie sont deux de mes principales caractéristiques, car j'aime relever des défis et apprendre constamment de nouvelles compétences pour me perfectionner.
                    <br>
                    <br>
                    <span class="p2">
                    En dehors du développement web, j'ai une autre passion : le football. Sur le terrain, j'ai découvert la cohésion d'équipe, l'esprit de compétition et le dépassement de soi, des valeurs que j'essaie de retranscrire dans mon travail.
                    </span>
                    <br>
                    <br>
                    <span class="p3">Un des grands objectifs de ma vie serait d'explorer de nouvelles cultures et de voyager. Des paysages à la culture, la diversité du monde me fascine.</span></p>
                </div>
                <div class="boutonAbout">
                <a target="_blank" href="./img/CV Aubin Manceau.pdf">Télécharger mon CV</a>
                </div>
            </div>
        </div>

        <div class="skills" id="skills">
            <div class="titreSection">
                    <h2>compétences</h2>
            </div>
            <div class="contentSkills">
                <div class="containerSkills">
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:95"></div>
                        <p>HTML</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:85"></div>
                        <p>CSS</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:70"></div>
                        <p>Javascript</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:70"></div>
                        <p>PHP</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:85"></div>
                        <p>WordPress</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:75"></div>
                        <p>Figma</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:55"></div>
                        <p>Illustrator</p>
                    </div>
                    <div class="contentProgressBar">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:65"></div>
                        <p>Photoshop</p>
                    </div>
                </div>
                <div class="containerSoft">
                    <ul>
                        <li>
                            <p>Curieux</p>
                        </li>
                        <li>
                            <p>Autodidacte</p>
                        </li>
                        <li>
                            <p>organisation</p>
                        </li>
                        <li>
                            <p>Esprit d'équipe</p>
                        </li>
                        <li>
                            <p>Discret</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="projects" id="projects">
            <div class="titreSection">
                    <h2>Projets</h2>
            </div>
            <div class="allprojects">
                <div class="navProjects">
                    <ul>
                        <li>
                            <p id="WebDesign">WebDesign</p>
                        </li>
                        <li>
                            <p id="Design">Design</p>
                        </li>
                        <li>
                            <p id="WebDev">Web Development</p>
                        </li>
                        <li>
                            <p class="active" id="All">All</p>
                        </li>
                    </ul>
                </div>
                <div class="projectsContenair">
                    <div class="imgProjects" id="AllProjects">
                        <figure class="caseProjects">
                            <a href="./anchor/"><img src="./img/anchor-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./ecurie-rp-jump/"><img src="./img/ecurie-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./naturan/"><img src="./img/naturan-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./planteo/"><img src="./img/planteo-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./vandb-fest/"><img src="./img/vandb-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./qr-code/"><img src="./img/qr-code-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./calculatrice/"><img src="./img/calculatrice-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./macaron/"><img src="./img/macaron-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./tracnart/"><img src="./img/tracnart-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./zoo/"><img src="./img/zoo-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./exodia/"><img src="./img/exodia-couverture.png" alt=""></a>
                        </figure>
                    </div>
                    <div class="imgProjects d-n" id="WebDevProjects">
                        <figure class="caseProjects">
                            <a href="./ecurie-rp-jump/"><img src="./img/ecurie-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./naturan/"><img src="./img/naturan-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./planteo/"><img src="./img/planteo-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./qr-code/"><img src="./img/qr-code-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./calculatrice/"><img src="./img/calculatrice-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./tracnart/"><img src="./img/tracnart-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./exodia/"><img src="./img/exodia-couverture.png" alt=""></a>
                        </figure>
                    </div>
                    <div class="imgProjects d-n" id="DesignProjects">
                        <figure class="caseProjects">
                            <a href="./anchor/"><img src="./img/anchor-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./vandb-fest/"><img src="./img/vandb-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./zoo/"><img src="./img/zoo-couverture.png" alt=""></a>
                        </figure>
                    </div>
                    <div class="imgProjects d-n" id="WebDesignProjects">
                        <figure class="caseProjects">
                            <a href="./ecurie-rp-jump/"><img src="./img/planteo-couverture.png" alt=""></a>
                        </figure>
                        <figure class="caseProjects">
                            <a href="./macaron/"><img src="./img/macaron-couverture.png" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="contact">
            <div class="titreSection">
                <h2>Contact</h2>
            </div>
            <section>
                <div class="leftContact">
                    <p>Vous souhaitez parler d'un projet, vous recherchez un stagiaire ou un alternant ? Alors utilisez le formulaire de contact ou mes informations personnelles ci-dessous !</p>
                    <form action="./index.php#contact" method="POST" id="contact-form">
                        <div class="nameForm">
                            <input class="inputForm" type="text" placeholder="Nom" name="lastname" required>
                            <input class="inputForm" type="text" placeholder="Prénom" name="firstname" required>
                        </div>
                        <input class="inputForm" type="email" placeholder="Email" name="email" required>
                        <textarea cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                        <?php
                        if(isset($info)){ ?>
                            <span class="erreur" style="color:red">
                                <?=$info?>
                            </span>
                        <?php
                        }
                        ?>   
                        <?php
                            if(isset($_SESSION['succes_message'])){ ?>
                                <span class="erreur" style="color:green">
                                    <?=$_SESSION['succes_message']?>
                                </span>
                            <?php
                            }
                        ?> 
                        <div class="boutonContact">
                            <button type="submit" name="send">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="rightContact">
                    <p class="titreContact">Informations</p>
                    <div class="emailFooter">
                        <p class="titreFooter">Email :</p>
                        <a href="mailto:aubinmanceau0@gmail.com">aubinmanceau0@gmail.com</a>
                    </div>
                    <div class="telFooter">
                        <p class="titreFooter">Téléphone :</p>
                        <a href="tel:+0763575212">07 63 57 52 12</a>
                    </div>
                    <div class="rsFooter">
                        <p class="titreFooter">Réseaux sociaux :</p>
                            <figure class="iconFooter">
                                <a href="https://www.linkedin.com/in/aubin-manceau/" target="_blank">
                                    <i class="fa-brands fa-linkedin-in fa-2x"></i>
                                </a>
                                <a href="https://www.instagram.com/aubin.portfolio/" target="_blank">
                                    <i class="fa-brands fa-instagram fa-2x"></i>
                                </a>
                                <a href="https://github.com/AubinManceau" target="_blank">
                                    <i class="fa-brands fa-github fa-2x"></i>
                                </a>
                            </figure>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <footer>
        <div class="nameFooter">
            <p>Aubin Manceau</p>
        </div>
        <div class="copyrightFooter">
            <p>copyright © - tous droits réservés</p>
        </div>
        <div class="anneeFooter">
            <p>2023</p>
        </div>
    </footer>
</body>
</html>