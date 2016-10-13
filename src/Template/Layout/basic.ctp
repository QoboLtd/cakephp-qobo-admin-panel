<?php
use Cake\Event\Event;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $event = new Event('QoboAdminPanel.Layout.Head', $this);
    $this->eventManager()->dispatch($event);
    echo $event->result;
?>
</head>
<body>
    <div id="wrapper">
    <?php
        $event = new Event('QoboAdminPanel.Layout.Header', $this);
        $this->eventManager()->dispatch($event);
        echo $event->result;
    ?>
        <div id="page-wrapper">
        <?php
            $event = new Event('QoboAdminPanel.Layout.Content', $this);
            $this->eventManager()->dispatch($event);
            echo $event->result;
        ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
    $event = new Event('QoboAdminPanel.Layout.Footer', $this);
    $this->eventManager()->dispatch($event);
    echo $event->result;
?>
</body>
</html>
