<div id="hash" class="content">
<div class="card card-primary">
<h1 class="card-header">Hasher</h1>
<div class="card card-body">
<form class="form" action="gen.php" method="POST" id="hasher">
  <input type="text" name="hash" class="form-control mb-2">
  <?= submitBtn("hasher", "action", "Hash", hasDice: False) ?>
</form>
  <div class="responseDiv" id="hasherresponse"></div>
</div>
</div>
</div>