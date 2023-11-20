                <?php
                class Student
                {
                    private string $lastname;
                    private string $firstname;
                    private DateTime $birthdate;
                    private string $grade;
                    private string $school;
                    public function __construct(string $lastname, string $firstname, DateTime $birthdate, string $grade, string $school)
                    {
                        $this->lastname = $lastname;
                        $this->firstname = $firstname;
                        $this->birthdate = $birthdate;
                        $this->grade = $grade;
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
                    public function setLatname(string $lastname): string
                    {
                        return $this->firstname = $lastname;
                    }
                    public function getBirthdate(): DateTime
                    {
                        return $this->birthdate;
                    }
                    public function setBirthdate(DateTime $birthdate): void
                    {
                        $this->birthdate = $birthdate;
                    }
                    public function getLevel(): string
                    {
                        return $this->grade;
                    }
                    public function setLevel(string $grade): string
                    {
                        return $this->grade = $grade;
                    }
                    public function getSchool(): string
                    {
                        return $this->school;
                    }
                    public function setSchool(string $school): string
                    {
                        return $this->school = $school;
                    }
                    public function getAge(): int
                    {
                        return $this->birthdate->diff(new DateTime)->y;
                    }
                    public function introduce(): string
                    {
                        return "Bonjour, je m'appelle {$this->firstname} {$this->lastname},
                        j'ai {$this->getAge()} ans et je vais à l'école {$this->school} en classe de {$this->grade}.";
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
                    <title>POO - Des élèves</title>
                </head>

                <body class="dark-template">
                    <div class="container">
                        <header class="header">
                            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
                            <nav class="main-nav">
                                <ul class="main-nav-list">
                                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
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
                                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                                <br>
                                Définir toutes les propriétés à l'instanciation.
                                <br>
                                Créer 2 étudiants différents.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                $student1 = new Student("françois", "pierre", new DateTime("1999-01-01"), "BTS", "");

                                var_dump($student1);

                                $student2 = new Student("claude", "françois", new DateTime("1999-01-01"), "Bac", "");

                                var_dump($student2);



                                ?>
                            </div>
                        </section>

                        <!-- QUESTION 2 -->
                        <section class="exercice">
                            <h2 class="exercice-ttl">Question 2</h2>
                            <p class="exercice-txt">
                                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                                <br>
                                Modifier le niveau scolaire des 2 élèves et les afficher.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                $student1->setLevel("Licence");
                                $student2->setLevel("Master");
                                var_dump($student1, $student2);


                                ?>
                            </div>
                        </section>

                        <!-- QUESTION 3 -->
                        <section class="exercice">
                            <h2 class="exercice-ttl">Question 3</h2>
                            <p class="exercice-txt">
                                Remplacer la propriété d'âge par la date de naissance de l'élève.
                                <br>
                                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                // $student1->setBirthday("1999-01-01");
                                var_dump($student1);
                                // $student2->setBirthday("1999-05-24");
                                var_dump($student2);

                                ?>

                            </div>
                        </section>

                        <!-- QUESTION 4 -->
                        <section class="exercice">
                            <h2 class="exercice-ttl">Question 4</h2>
                            <p class="exercice-txt">
                                Donner la possibilité aux élèves de donner leur âge.
                                <br>
                                Afficher l'âge des 2 élèves.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                var_dump($student1->getAge());
                                ?>


                            </div>
                        </section>

                        <!-- QUESTION 5 -->
                        <section class="exercice">
                            <h2 class="exercice-ttl">Question 5</h2>
                            <p class="exercice-txt">
                                On veut aussi savoir le nom de l'école où va un élève.
                                <br>
                                Ajouter la propriété et ajouter la donnée sur les élèves.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                $student1->setSchool("Creative");
                                $student2->setSchool("VIA");
                                $student1->getSchool();
                                $student2->getSchool();
                                var_dump($student1, $student2)

                                ?>

                            </div>
                        </section>

                        <!-- QUESTION 6 -->
                        <section class="exercice">
                            <h2 class="exercice-ttl">Question 6</h2>
                            <p class="exercice-txt">
                                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                                <br>
                                Afficher la phrase de présentation des 2 élèves.
                            </p>
                            <div class="exercice-sandbox">
                                <?php
                                echo $student1->introduce();
                                echo $student2->introduce();
                                ?>

                            </div>
                        </section>

                    </div>
                    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
                </body>

                </html>