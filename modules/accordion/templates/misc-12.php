<?php

/*

  type: layout

  name: Misc-12

  description: Misc-12 template


*/

?>
<?php
if ($json == false) {
    print lnotif(_e('Click to edit accordion', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}
?>

<div class="row" id="mw-accordion-module-<?php print $params['id'] ?>">
    <div class="col-lg-2">
        <ul class="nav flex-column" id="accordion-<?php print $params['id']; ?>" role="tablist">
            <?php foreach ($json as $key => $slide): ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($key == 0): ?>active<?php endif; ?>" id="<?php print $params['id'] . '-' . $key; ?>-tab" data-bs-toggle="tab" href="#tab-<?php print $params['id'] . '-' . $key; ?>" role="tab" aria-controls="home"
                       aria-selected="true"><?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><?php print isset($slide['title']) ? $slide['title'] : ''; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-lg-10">
        <div class="tab-content" id="accordion-<?php print $params['id']; ?>-content">
            <?php foreach ($json as $key => $slide): ?>

                <?php
                $edit_field_key = $key;
                if (isset($slide['id'])) {
                    $edit_field_key = $slide['id'];
                }

                ?>



                <div class="tab-pane fade <?php if ($key == 0): ?>show active<?php endif; ?>" id="tab-<?php print $params['id'] . '-' . $key; ?>" role="tabpanel" aria-labelledby="<?php print $params['id'] . '-' . $key; ?>-tab">
                    <div class="edit" field="accordion-item-<?php print $edit_field_key ?>" rel="module-<?php print $params['id'] ?>">
                        <div class="row">
                            <div class="col-lg-7 col-lg-7">
                                <div class="description  ">
                                    <h2><?php print isset($slide['title']) ? $slide['title'] : ''; ?> </h2>
                                    <p><?php _lang('Lorem Ipsum is simply dummy text of the printing and typesetting industry. been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'templates/theplace'); ?></p>
                                    <p><?php _lang('It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.', 'templates/theplace'); ?></p>
                                </div>
                            </div>

                            <div class="col-lg-5 col-lg-5 text-center  ">
                                <img src="<?php print template_url(); ?>assets/img/sections/cacke.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
