<?php
require_once(get_template_directory().'/util.php');

$agenda = array(
  'categoria' => get_query_var('categoria'),
  'titulo' => get_query_var('titulo'),
  'data' => get_query_var('data')
);

$agenda['data'] = new DateTime($agenda['data']);
?>

<div class="item card-agenda">
  <div class="row p-0 m-0">
    <div class="col-md-4 p-2 m-0 card-left">
      <div class="date pl-2">
        <div class="day">
          <?php echo $agenda['data']->format('j'); ?>
        </div>
        <div class="month">
          <?php echo strtoupper(getMonthPT($agenda['data']->format('m'))); ?>    
        </div>
      </div>
      <div class="ml-3">
        <?php echo $agenda['data']->format('H:i'); ?>
      </div>
    </div>
    <div class="col-md p-2 m-0 card-right">
      <p class="mt-3 text-right">
        <?php echo $agenda['titulo']; ?>
      </p>
      <span class="badge badge-<?php echo $agenda['categoria']; ?> float-right">
        <?php echo catAgenda($agenda['categoria']); ?>
      </span>
    </div>
  </div>
</div>