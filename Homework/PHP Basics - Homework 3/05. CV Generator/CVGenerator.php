<?php
include 'header.php';
?>
    <form id="cv" action="generate.php" method="post">
        <p id="generator-title">CV Generator</p>
        <fieldset>
            <legend>Personal Information</legend>
            <input class="input" type="text" name="firstName" placeholder="First Name" required/>
            <input class="input" type="text" name="lastName" placeholder="Last Name" required/>
            <input class="input" type="email" name="email" placeholder="Email" required/>
            <input class="input" type="text" name="phone" placeholder="Phone Number" required/>
            <label id="gender" for="gender">
                Female: <input type="radio" name="gender" value="Female" required/>
                Male: <input type="radio" name="gender" value="Male" required/>
            </label>
            <label for="birthDate">
                <span id="birthday-label">Birth Date:</span>
                <input type="date" name="birthDate" required/>
            </label>
            <label for="nationality">
                <span id="nationality">Nationality:</span>
                <select name="nationality" id="nationality">
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Germany">Germany</option>
                    <option value="Italy">Italy</option>
                    <option value="France">France</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <legend>Last Work Position</legend>
            <label for="company">
                <span class="position-label-comp">Company name:</span> <input class="input-pos" type="text"
                                                                              name="company" required/>
            </label>
            <label id="from" for="from">
                <span class="position-label-from">From:</span> <input class="input-pos" type="date" name="from"/
                required>
            </label>
            <label id="to" for="to">
                <span class="position-label-from">To:</span> <input class="input-pos" type="date" name="to"/ required>
            </label>
        </fieldset>
        <fieldset>
            <legend>Computer Skills</legend>
            <span id="comp-skills-label">Programming Languages:</span>

            <div>
                <div id="prog-language1">
                    <label for="compSkills[]">
                        <input type="text" name="compSkills[]" required/>
                        <select name="level[]" id="level" required>
                            <option value="" disabled selected>-Level-</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="code master">Code Master</option>
                        </select>
                    </label>
                </div>
            </div>
            <label for="add-lang">
                <input class="add-button" name="add-lang" type="button" value="Add" onclick="addProgramLang()"/>
                <input class="remove-button" name="add-lang" type="button" value="Remove"
                       onclick="removeProgramLang()"/>
            </label>
        </fieldset>
        <fieldset>
            <legend>Other Skills</legend>
            <span id="other-skills-label">Languages:</span>

            <div>
                <div id="speaking-language1">
                    <label for="otherSkills[]">
                        <input id="language-input" type="text" name="otherSkills[]" required/>
                        <select name="comprehension[]" id="comprehension[]" required>
                            <option value="" disabled selected>-Comprehension-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <select name="reading[]" id="reading[]" required>
                            <option value="" disabled selected>-Reading-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <select name="writing[]" id="writing[]" required>
                            <option value="" disabled selected>-Writing-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </label>
                </div>
            </div>
            <label for="add-lang">
                <input class="add-button" name="add-lang" type="button" value="Add" onclick="addLang()"/>
                <input class="remove-button" name="add-lang" type="button" value="Remove" onclick="removeLang()"/>
            </label>
            <label for="license">
                <span id="license-label">Driver License:</span>
                B<input type="checkbox" name="license[]" value="B"/>
                A<input type="checkbox" name="license[]" value="A"/>
                C<input type="checkbox" name="license[]" value="C"/>
            </label>
        </fieldset>
        <input id="generate-button" name="submit" type="submit" value="Generate CV"/>
    </form>
    <script src="js/addRemove.js"></script>
<?php
include 'footer.php'
?>