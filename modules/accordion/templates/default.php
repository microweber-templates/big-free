<?php

/*

  type: layout

  name: Default

  description: Default template


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

<script>
    $(document).ready(function() {

        function toggleChevron(e) {
            $(e.target)
                .prev('.mw-accordion-faq-skin-header')
                .find("i.mdi")
                .toggleClass('mdi-minus mdi-plus')
                .toggleClass('active')
        }
        $('#accordion-sk3').on('hidden.bs.collapse', toggleChevron);
        $('#accordion-sk3').on('shown.bs.collapse', toggleChevron);

        $(".card.sk2").click(function() {
            $(".card.sk2").removeClass("active");
            $(this).addClass("active");
        });

    })
</script>

<style>
    .mw-accordion-faq-skin-button {
        background-color: #F9F9F9;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        width: 100%;
        border: none;
        border-radius: 0;
        cursor: pointer;
        outline: none;

    }

    .mw-accordion-faq-skin-header:has(.active) {
        border-bottom: none !important;

    }

    .mw-accordion-faq-skin-card {
        border: none;

    }


</style>

<div id="mw-accordion-module-<?php print $params['id'] ?>">
    <div class="accordion" id="accordion-sk3">

        <?php foreach ($json as $key => $slide) : ?>
            <?php
            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }

            ?>
            <div class="mw-accordion-faq-skin-card card mb-3 <?php if ($key == 0) : ?> active <?php endif; ?>">
                <div class="mw-accordion-faq-skin-header card-header p-0" id="header-item-<?php print $edit_field_key ?>">
                    <button class="mw-accordion-faq-skin-button" data-bs-toggle="collapse" data-bs-target="#collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" aria-expanded="false" aria-controls="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>">
                        <h5 class="ps-2 mb-0"> <?php print isset($slide['title']) ? $slide['title'] : ''; ?> </h5>
                        <i class="mdi mdi-plus active" style="font-size: 24px;"></i>
                    </button>
                </div>
                <div  id="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" class="collapse" aria-labelledby="header-item-<?php print $edit_field_key ?>" data-parent="#mw-accordion-module-<?php print $params['id'] ?>">
                    <div class="card-body py-3 px-4">
                        <?php include modules_path() . 'accordion/templates/partials/render_accordion_item_content.php'; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
