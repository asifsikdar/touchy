<?php include'../components/header.php'?>

<div class="row">
    <div class="col-md-6">
        <div class="map">
            <div class="embded-map" style="margin-top:18px">
            <iframe class="embded-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.833541689993!2d90.36599742916106!3d23.77111192636589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1705e935263%3A0x864bebd8473f0e66!2sThemefisher!5e0!3m2!1sen!2sbd!4v1613384832777!5m2!1sen!2sbd" width="400" height="450" margin-left="400px" margin-top="50px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        
    </div>
<div class="col-md-6">
    <form action="#" class="form-class" method="post">
        <div class="massage">
            <div class="massage-group">
                <input type="text" name="name" class="massag-item" placeholder="Name"><br><br>
                <input type="email" name="email" class="massag-item" placeholder="Email"><br>
                <textarea type="text" name="massage" class="massage-items" placeholder="Write Massage"></textarea>
            </div>
                  <div class="submit-text">
                     <button type="button" class="btn btn-primary">Submit</button>
                  </div>
            </div>
        </form>
    </div>
</div>







<?php include'../components/footer.php'?>