<div class="header">
    <div class="container">
      <div class="login">
        <div class="login-field">
         
          <button class="login-button add-car">Logi sisse</button>
          <button class="register-form">Registreeru</button>
          
        </div>
        <div class="login-toggle">Logi sisse</div>
        
      </div>
      <div class="clear"></div>
    </div>

    <div class="search-box">
      <div class="container">
        <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <button class="logout">Otsi</button>
      <button class="more-details">Rohkem detaile</button>
      <div class="detail-search">
        <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
        

      </div>

      </div>
    </div>

  </div>
<div class="container">

  <div class="content">
      
  <?php foreach ($cars as $car) {?>
    <div class="object">
      <a href="?r=site/object&id=<?php echo $car->ID; ?>"></a>
      <div class="object-img">
      
      <img alt="" src="images/<?php echo $car->ID; echo "/"; echo $car->mainImg; ?>" />
      </div>
      <div class="object-text">
      <h2><?php echo $car->make; echo " "; echo $car->model; ?></h2>
      <p><?php echo $car->description; ?></p>
      </div>
    
    </div>  
  <?php } ?>
      

  <div class="clear"></div>

  </div>
</div>