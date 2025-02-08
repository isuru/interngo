<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Registration</title>

    <link rel="stylesheet" href="./styles/internRegDt.css">

</head>
<body>


<div class="container">
    <h2>Intern Registration Form</h2>
    <form name="internForm" action="" method="POST"  onsubmit="return validateForm()">

        <!-- Personal Information -->
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
        </div>

        <div class="form-group">
            <label for="nameWithIni">Name with Initials:</label>
            <input type="text" id="nameWithIni" name="nameWithIni" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="nic">National Identity Card (NIC) No:</label>
            <input type="text" id="nic" name="nic" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <!-- Education Information -->
        <h3>Educational Qualifications</h3>

        <div class="form-group">
            <label for="education">Highest Education Level:</label>
            <select id="education" name="education" required>
                <option value="">Select</option>
                <option value="Diploma">Diploma</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Postgraduate">Postgraduate</option>
            </select>
        </div>

        <div class="form-group">
            <label for="university">University/Institute:</label>
            <input type="text" id="university" name="university" required>
        </div>

        <div class="form-group">
            <label for="field">Field of Study:</label>
            <input type="text" id="field" name="field" required>
        </div>

        <!-- Internship Preferences -->
        
        <h3>Internship Preferences</h3>

        <div class="form-group">
            <label for="jobCategory">Select Job Category:</label>
            <select id="jobCategory" name="jobCategory" onchange="updateRoles()" required>
                <option value="">Select a Category</option>
                <option value="IT">Information Technology</option>
                <option value="Engineering">Engineering</option>
                <option value="Business">Business & Finance</option>
                <option value="Healthcare">Healthcare & Medical</option>
            </select>
        </div>

        <div class="form-group">
            <label for="role">Preferred Internship Role:</label>
            <select id="role" name="role" required>
                <option value="">Select a Role</option>
            </select>
        </div>

        <div class="form-group">
            <label for="duration">Preferred Duration:</label>
            <select id="duration" name="duration" required>
                <option value="">Select</option>
                <option value="3 months">3 Months</option>
                <option value="6 months">6 Months</option>
            </select>
        </div>


        <!-- Skills & Experience -->
        <h3>Skills & Experience</h3>

        <div class="form-group">
            <label for="skills">Technical Skills:</label>
            <textarea id="skills" name="skills" rows="4" placeholder="List your technical skills (e.g., HTML, Java, Python)"></textarea>
        </div>

        <div class="form-group">
            <label for="portfolio">Portfolio (GitHub/Website):</label>
            <input type="url" id="portfolio" name="portfolio">
        </div>

        <!-- Resume & Documents -->
        <h3>Upload Documents</h3>

        <div class="form-group">
            <label for="resume">Upload Resume (PDF/DOCX):</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        </div>



        <!-- Submit Button -->
        <input type="submit" value="Register" class="btn">
        
    </form>
</div>



<script>
    function updateRoles() {
        let jobCategory = document.getElementById("jobCategory").value;
        let roleDropdown = document.getElementById("role");
    
        // Clear existing options
        roleDropdown.innerHTML = '<option value="">Select a Role</option>';
    
        // Define role options based on category
        let roles = {
            "IT": ["Software Developer", "Web Developer", "Data Analyst", "Cybersecurity Intern"],
            "Engineering": ["Mechanical Engineer", "Electrical Engineer", "Civil Engineer"],
            "Business": ["Marketing Intern", "Finance Analyst", "HR Assistant"],
            "Healthcare": ["Medical Assistant", "Pharmacy Intern", "Biomedical Researcher"]
        };
    
        // Populate new roles based on selected category
        if (roles[jobCategory]) {
            roles[jobCategory].forEach(function(role) {
                let option = document.createElement("option");
                option.value = role;
                option.textContent = role;
                roleDropdown.appendChild(option);
            });
        }
    }
    
    function validateForm() {
        let jobCategory = document.getElementById("jobCategory").value;
        let role = document.getElementById("role").value;
    
        if (jobCategory === "" || role === "") {
            alert("Please select a Job Category and Role.");
            return false;
        }
    
        return true;
    }
    </script>

</body>
</html>
