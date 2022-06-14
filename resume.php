<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />


    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <!-- <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" /> -->
    <title>Resume Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css">
</head>

<body>
    <!-- Main -->
    <div id="main" class="box">
        <?php
        include "Header.php"
        ?>
        <?php
        include "menu.php"
        ?>


        <div class="container text-light">
            <h1 class="text-center my-5 fw-bold">Resume Form</h1>
            <div class="form-container">
                <form action="submit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="HGsZOXpfNC">
                    <div class="border border-dark p-3 mb-3">
                        <h2>Profile Image</h2>
                        <div class="mb-3">
                            <label class="form-label">Select a square image 1:1 (Recommended)</label>
                            <input class="form-control" name="profile_image" type="file" required>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>Contact</h2>
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                            <div>
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Profession</label>
                            <input type="text" class="form-control" name="profession" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                            <div class="form-text text-light">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="0300-1234567" required>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>Skills (Max:5)</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                            <input type="text" class="form-control" name="skill1" required>
                            <select class="form-select mt-2" name="skill_level1" required>
                                <option value="">Select stars based upon your skill level</option>
                                <option value="1">1 - Novice</option>
                                <option value="2">2 - Advanced Beginner</option>
                                <option value="3">3 - Competent</option>
                                <option value="4">4 - Proficient</option>
                                <option value="5">5 - Expert</option>
                            </select>
                        </div>
                        <div id="addSkill"></div>
                        <div class="mb-3">
                            <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>Hobbies (Max:4)</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hobby</label>
                            <input type="text" name="hobby1" class="form-control" required>
                        </div>
                        <div id="addHobby"></div>
                        <div class="mb-3">
                            <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>About Me</h2>
                        <div class="form-floating">
                            <textarea class="form-control aboutme" name="about_me" style="height: 100px" required></textarea>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>Education (Max:3)</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                            <input type="text" name="institute1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                            <input type="text" name="degree1" class="form-control">
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div>
                                <label for="exampleInputEmail1" class="form-label">From</label>
                                <input type="text" name="from1" class="form-control">
                            </div>
                            <div>
                                <label for="exampleInputEmail1" class="form-label">To</label>
                                <input type="text" name="to1" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                            <input type="text" name="grade1" class="form-control">
                        </div>
                        <div id="addEducation"></div>
                        <div class="mb-3">
                            <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                        </div>
                    </div>
                    <div class="border border-dark p-3 mb-3">
                        <h2>Experience (Max:3)</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" name="title1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <input type="text" name="description1" class="form-control">
                        </div>
                        <div id="addExperience"></div>
                        <div class="mb-3">
                            <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                        </div>
                    </div>
                    <input type="submit" class="form-control my-2">
                </form>
            </div>
        </div>
        <script src="app.js"></script>

        <?php
        include "footer.php"
        ?>
    </div> <!-- /main -->

</body>

</html>