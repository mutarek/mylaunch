<?php $this->extend("static/base");?>


<?= $this->section('content'); ?>

<div class="background">
    <div class="main_container">
        <div class="form_container">
            <br>
            <div class="form_heading">
                <h1>Book a <span>Room</span> to your <span>Destination.</span></h1>
            </div>
            <div class="form_with_heading">
                <p>Search Your Trip</p>
                <div class="main_form">
                    <form action="launch.php" method="post">
                        <div class="left_side">
                            <label for="departure_name">Departure From</label>
                            <select name="departure" id="">
                                <option value="" selected disabled>Select Launch Terminal</option>
                            
                                <option value="<?php echo$row['id']; ?>"><?php echo$row['name']; ?></option>
                            </select>
                            <label for="date">Departure Date</label>
                            <input name="date" type="date" id="date_picker" class="form-control" Placeholder="Select Date"/>
                        </div>
                        <div class="right_side">
                            <label for="arrival_name">Arrival At</label>
                            <select name="arrival" id="">
                                <option value="">Select Launch Terminal</option>
                                
                            
                                <option value="<?php echo$row['id']; ?>"><?php echo$row['name']; ?></option>
                            </select>
                            <input type="submit" name="search" id="form_submit" value="Search Launch">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


