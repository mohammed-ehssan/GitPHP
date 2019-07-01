<?php include 'header.php';?>
    <div class="s01">
      <form method="GET" action="/details">
        <fieldset>
          <legend>Discover User Account on GitHub</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="Type Username "  name="user"/>
          </div>
          <!-- <div class="input-field second-wrap">
            <input id="location" type="text" placeholder="location" />
          </div> -->
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
<?php include 'footer.php'; ?>
