
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equip="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form In PHP</title>
</head>
     
                                                                
<main>
<body>
   
    <form action=" contact.php" method="POST">
        <h1>Create Your Virtual ID Card</h1>

        <!-- Name Field ---->
        <div class="form-field">
        <label for="field" class="lebel-required">Name</label>
        <section>
        <input name= "std-name" id="field" required type="text" placeholder="Jon Dee"/>
</section>
</div>

        <!-- Phone Field ---->
        <div class="form-field">
        <label for="phone" class="lebel-required">Phone</label>
        <section>
        <input name="std-phone"  id= "phone" required type="tel" placeholder="(234) 234-2342)"/>
</section>
</div>

 <!-- Email Field ---->
 <div class="form-field">
        <label for="email" class="lebel-required">Email</label>
        <section>
        <input name="std-email"  id= "email" required type="email" placeholder="explain@gmail.com"/>
</section>
</div>

<!-- Course  Field ---->
<div class="form-field">
        <label for="course" class="lebel-required">Course</label>
        <section>
        <input name="std-course"  id= "email" required type="course" placeholder="Name of Your Course"/>
</section>
</div>

<!-- Batch  Field ---->
<div class="form-field">
        <label for="batch" class="lebel-required">Batch</label>
        <section>
        <input name="std-batch"  id= "batch" required type="batch" placeholder="Your Batch No"/>
</section>
</div>

<!-- Button  Field ---->
<div class="form-buttons">
        <input  name="generate-btn" type="submit" value="Generate Id">
</div>

</form>
</main>

</body>


</html>



 