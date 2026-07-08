<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <h2>Enter Details</h2>
        <form action="response.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="firstName">First Name</label>
                <input class="form-control" type="text" name="first_name" id="firstName">
            </div>
            <div class="mb-3">
                <label class="form-label" for="lastName">Last Name</label>
                <input class="form-control" type="text" name="last_name" id="lastName">
            </div>
            <div class="mb-3">
                <label class="form-label" for="gender">Select Gender</label>
                <select class="form-select" name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="dob">Date of Birth</label>
                <input class="form-control" type="date" name="dob" id="dob">
            </div>
            <div class="mb-3">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="mb-3">
                <label class="form-label" for="comments">Comments</label>
                <textarea class="form-control" name="comments" id="comments"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>