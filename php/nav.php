<?php
  require_once 'database.php';

  function navLink($name, $url) {
    $active = (basename($_SERVER["PHP_SELF"]) == $url) ? 'active' : '';

    return "<li class=\"{$active}\"><a href={$url}>{$name}</a></li>";
  }

  function getAccessGroupsOf() {
    $params = $_SESSION['username'];
    $rows = query("SELECT AG_id AS id, AG_name AS name
                    FROM AccessGroup AG
                    INNER JOIN AccessUserGroup AUG ON AG_id = AUG_AG_id
                    INNER JOIN Shopper ON AUG_Shopper_id = shopper_id
                    WHERE sh_username = ?", $params);
    return $rows;
  }

  function getCommandsOf($ag_id) {
    $params = $ag_id;
    $rows = query("SELECT Cmd_name AS name, Cmd_URL AS url
                    FROM Commands cmd
                    INNER JOIN AccessGroupCommands agc ON Cmd_id = AGC_Cmd_id
                    WHERE AGC_AG_id = ?", $params);
    return $rows;
  }

  function getAGNavDropdown($ag_id, $ag_name) {
    $dropdown = "<li class=\"dropdown\">"
              . "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">{$ag_name} <span class=\"caret\"></span></a>"
              . "<ul class=\"dropdown-menu\">";
    $commands = getCommandsOf($ag_id);
    foreach ($commands as $cmd) {
      $dropdown .= navLink($cmd['name'], $cmd['url']);
    }
    $dropdown .= "</ul></li>";

    return $dropdown;
  }



?>

<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SURS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php
            echo navLink('Display Category', 'DisplayCategory.php');
            echo navLink('Display Products', 'DisplayProducts.php');
            echo navLink('Display Product',  'DisplayProduct.php');
          ?>
          </ul>
        </li>

        <?php
        if (isset($_SESSION['username'])) {
          $access_groups = getAccessGroupsOf($_SESSION['username']);
          foreach ($access_groups as $ag) {
            echo getAGNavDropdown($ag['id'], $ag['name']);
          }
        }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu">

        <?php
          echo navLink('User Profile', 'UserProfile.php');
          echo navLink('Payment Methods', 'PaymentMethods.php');
          echo navLink('Address Book', 'AddressBookAdd.php'); 
        if (isset($_SESSION['username'])) {
         
          echo navLink('Logout', 'LogoutShopper.php');
        } else {
          echo navLink('Login', 'Login.php');
          echo navLink('Register', 'CreateAccount.php');
        }
        ?>
          </ul>
        </li>


      </ul>
    </div>
  </div>
</nav>
