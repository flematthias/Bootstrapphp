
<?php include ('includes/head.php');?>

<body>
    <?php include ('includes/header.php');?>
    <section id="Contact" class="p-5 pt-5">
        <div class="container">
            <div class="row d-flex align-items-center ">
                <div class="col-sm-4">
                    <h1>Contact</h1>
                    
                </div>
                <div class="col-sm-8">
                    <form>
                        <div class="form-group w-75">
                            <label for="formGroupExampleInput"></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name">
                        </div>
                        <div class="form-group w-75">
                            <label for="exampleFormControlInput1"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="YourEmail@email.com">
                        </div>
                        <div class="form-group w-75">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">

                            <button type="submit" class="btn w-75">Envoyer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include ('includes/footer.php');?>
    <?php include ('includes/scripts.php');?>
</body>

</html>