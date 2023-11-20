<?php
class teacher
{
    private string $lastname; //(nom)
    private string $firstname; //(prenom)
    private array $subject;
    private string $school;
    public function __construct(string $lastname, string $firstname, array $subject = [], string $school = '')
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->subject = $subject;
        $this->school = $school;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): string
    {
        return $this->firstname = $firstname;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname): string
    {
        return $this->lastname = $lastname;
    }

    public function getSubject(): array
    {
        return $this->subject;
    }
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
    }
    public function addSubject(string $subject): void
    {
        $this->subject[] = $subject;
    }
    public function removeSubject(string $subject): void
    {
        $index = array_search($subject, $this->subject);
        if ($index !== false) unset($this->$subject[$index]);
    }

    public function displaySubject(): string
    {
        return implode(',', $this->subject);
    }

    public function getSchool(): string
    {
        return $this->school;
    }
    public function setSchool(string $school)
    {
        return $this->school = $school;
    }
    // public function getAge(): int
    // {
    //     return $this->birthdate->diff(new DateTime)->y;
    // }
    public function introduce(): string
    {
        return "Bonjour, je m'appelle {$this->firstname} {$this->lastname} et j'enseigne à l'école {$this->school} les matières suivantes : {$this->displaySubject()}.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                $teacher1 = new teacher("Jarre", "jean-michel");

                $teacher2 = new teacher("lenormand", "gérard");
                var_dump($teacher1, $teacher2);
                ?>

            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">
                <?php
                // $teacher1->setSchool("sainte-marie-joseph");
                $teacher1->setSchool("sainte-algue");
                $teacher2->setSchool("sainte-marie-joseph");
                echo $teacher1->getSchool();
                echo "<br>";
                echo $teacher2->getSchool();

                ?>
            </div>
        </section>


        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">
                <?php
                $teacher1->addSubject('Français');
                $teacher1->addSubject("anglais");
                var_dump($teacher1);
                echo $teacher1->displaySubject();
                ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">
                <?= $teacher1->introduce() ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>