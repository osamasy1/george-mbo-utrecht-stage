<!-- Reservation page -->

<div class="container" id="reservationnav">

  <div class="content" onclick="remove_class()">
<br>
    <form class="inner_content" action="./booking_script.php" method="POST">
      <h2 class="form_head"><span class="">BOOK A TABLE</span></h2>
      <p class="form_slg">We offer you the best reservation services</p>


      <div class="left">

        <div class="form_group">

          <label>Number of Guest</label>
          <input type="number" placeholder="How many guests" min="1" name="guest" id="guest" required>

        </div>

        <div class="form_group">

          <label>Date</label>
          <input type="date" name="date_res" placeholder="Select date for booking" required>

        </div>

        <div class="form_group">

          <label>Time</label>
          <input type="time" name="time" placeholder="Select time for booking" required>

        </div>


      </div>

      <div class="left">

        <div class="form_group">

          <label>Suggestions<small><b></b></small></label>
          <textarea name="suggestions" placeholder="your suggestions" required></textarea>

        </div>

        <div class="form_group">

          <input type="submit" class="submit" name="submit" value="MAKE YOUR BOOKING">

        </div>
      </div>
    </form>


    <!-- END Reservation page -->