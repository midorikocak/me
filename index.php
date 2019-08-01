<?php
require('data/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body itemscope itemtype="http://schema.org/Person">
<header>
    <h1 itemprop="name"><?= $name ?></h1>
    <img src="<?= $picture ?>" width="150" alt="<?= $name ?>"/>
    <nav>
        <ul>
            <li><a href="#summary">Summary</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <section id="summary">
            <h2>
                Summary
            </h2>
            <p>
                <?= $summary ?>
            </p>
        </section>
        <section id="work">
            <h2>Work</h2>
            <ul>
                <?php foreach ($work as $employment) : ?>
                    <li>
                        <strong><?= $employment['company'] ?></strong><br>
                        <small><?= $employment['position'] ?></small>
                        <br>
                        <a href="<?= $employment['website'] ?>" itemprop="url"><?= $employment['website'] ?></a><br>
                        <?= $employment['startDate'] ?> - <?= $employment['endDate'] ?><br>
                        <p><?= $employment['summary'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="education">
            <h2>Education</h2>
            <ul>
                <?php foreach ($education as $school) : ?>
                    <li itemprop="alumniOf" itemscope itemtype="http://schema.org/CollegeOrUniversity">
                        <strong itemprop="name"><?= $school['institution'] ?></strong><br>
                        <small><?= $school['area'] ?? '' ?></small>
                        <br>
                        <?= $school['startDate'] ?> - <?= $school['endDate'] ?><br>
                        <p><?= $school['summary'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="languages">
            <h2>Languages</h2>
            <ul>
                <?php foreach ($languages as $language) : ?>
                    <li>
                        <?= $language ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="skills">
            <h2>Skills</h2>
            <ol>
                <?php foreach ($skills as $skill) : ?>
                    <li>
                        <?= $skill ?>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section>
    </article>
</main>
<footer>
    <h2>Social</h2>
    <nav>
        <ul>
            <?php foreach ($profiles as $profile) : ?>
                <li>
                    <a href="<?= $profile['url'] ?>"><?= $profile['network'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <section id="contact">
        <h2>Contact</h2>
        <ul>
            <li>
                <a href="mailto:<?= $email ?>">E-mail</a>
            </li>
            <li>
                <a href="contact.php">Contact Form</a>
            </li>
        </ul>
    </section>
</footer>
</body>
</html>
