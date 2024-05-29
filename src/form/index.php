<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../head.php'); ?>
</head>
<body>
    <?php include('../header.php'); ?>

    <section class="my-5">
        <div class="container col-10 col-offset-1">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form</li>
                </ol>
            </nav>

            <h2 class="pb-2 border-bottom">Form</h2>

            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Form send.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['success']) && $_GET['success'] == 0): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Form not send.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, officiis.</p>

            <form action="send.php" method="post" id="form1" enctype="multipart/form-data">
                
                <div class="my-3 col-md-6">
                    <label for="txtName" class="form-label"><b>Whats your Name? *</b></label>
                    <input type="text" class="form-control" id="txtName" name="txtName" required>
                </div>

                <div class="my-3 col-md-6 col-lg-4">
                    <label for="txtEmail" class="form-label"><b>Whats your E-mail? *</b></label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" required>                    
                </div>
                
                <div class="my-3 col-md-4 col-lg-3">
                    <label for="txtPhone" class="form-label"><b>Whats your Phone? *</b></label>
                    <input type="text" class="form-control" id="txtPhone" name="txtPhone" maxlength="15" required>
                </div>

                <div class="mb-3">
                    <label for="rblOption" class="form-label"><b>Select your option *</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rblOption" id="rblOption1" value="Option 1" checked>
                        <label class="form-check-label" for="rblOption1">
                            Option 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rblOption" id="rblOption2" value="Option 2">
                        <label class="form-check-label" for="rblOption2">
                            Option 2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rblOption" id="rblOption3" value="Option 3">
                        <label class="form-check-label" for="rblOption3">
                            Option 3
                        </label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="fileUpload" class="form-label"><b>Upload</b></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="fileUpload" name="fileUpload">
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-primary my-4">Send</button>
            </form>
        </div>
    </section>

    <script src="/js/masks.js"></script>

    <?php include('../footer.php'); ?>
</body>
</html>