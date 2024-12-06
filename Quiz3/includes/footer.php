
    <div id="footer">
      <h1><strong>Thank You For Visiting!</strong></h1>
      <div class="footerLinks">
      <?php
          
          @ $db=new mysqli($GLOBALS['svr'],$GLOBALS['user'],$GLOBALS['pwd'],$GLOBALS['database']);
          $query='select * from myFooter';
          $result=$db->query($query);
          $numRecords=$result->num_rows;
          for($i=0;$i<$numRecords;$i++){
            $row=$result->fetch_assoc();
            echo '<a href="' .  htmlspecialchars(trim($row['landing'])).'">' .
            htmlspecialchars(trim($row['display'])) . '</a>';
          }
          $db->close();
          
        ?>
        <!-- <a href="mailto:arielle.a.revis@gmail.com">arielle.a.revis@gmail.com</a>
        <a href="tel:8482379843">(848) - 237 9843</a>
        <a href="https://www.linkedin.com/in/arielle-revis/">linkedin.com/ariellerevis</a> -->
      </div>
    </div>
  </body>
</html>
