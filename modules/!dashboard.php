<div id="dashboard" class="content">
<div class="card">
  <h1 class="card-header">Welcome to RAND!</h1>
  <div class="card-body">
    <p class="text-muted">
      This page includes a bunch of tools. Choose a tool above to get started.
      <br>
      To see more, click one of the links below or in the navbar.
    </p>

    <hr>

    <h4>Tools</h4>
    <ul class="">
    <?php
      $modules = listModules();
      foreach ($modules as $module) {
        $name       = $module["name"];
        $formalname = $module["formalName"];
        if ($name == "dashboard") continue;
        echo '<li><a class="link" href="#'.$name.'" data-show="'.$name.'">'.$formalname.'</a></li>';
      }
    ?>
    </ul>
  </div>
</div>
</div>