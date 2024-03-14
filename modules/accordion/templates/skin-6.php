<?php

/*

  type: layout

  name: skin-6

  description: Skin-6 template


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

    $(document).ready(function () {
        var root = $("#mw-accordion-module-<?php print $params['id'] ?>");
        $('.accordion__title', root).on('click', function () {
            $(this).parent().toggleClass('active');
            var isActive = $(this).parent().hasClass('active');
            if (isActive) {
                $('.plus-icon', this).addClass('rotate-icon');
            } else {
                $('.plus-icon', this).removeClass('rotate-icon');
            }
            $('li.active', root).not($(this).parent()).removeClass('active');
        });

        // Listen for the show.bs.collapse event
        $('.acordion-content-wrapper', root).on('show.bs.collapse', function () {
            $('.plus-icon', $(this).prev()).addClass('rotate-icon');
        });

        // Listen for the hide.bs.collapse event
        $('.acordion-content-wrapper', root).on('hide.bs.collapse', function () {
            $('.plus-icon', $(this).prev()).removeClass('rotate-icon');
        });
    });

</script>

<style>

    .accordion-section {
        display: flex;
        flex-direction: column;
    }

    .accordion-section {
        align-self: stretch;
        column-gap: 12px;
        row-gap: 12px;
    }

    .accordion-item, .accordion-title {
        background-color: #f4f3f1;
        border-radius: 10px;
    }

    .accordion-title {
        align-items: center;
        column-gap: 24px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        padding: 18px;
        row-gap: 24px;
        transition: opacity .2s;
        transition-behavior: normal;
        border: none;
        width: 100%;
    }

    .accordion-content {
        padding: 9px 18px 18px;
    }

    .accordion-text {
        max-width: 671px;
    }


    .accordion-title:hover {
        opacity: .5;
    }

    @media screen and (max-width: 479px) {
        .accordion-item {
            border-radius: 6px;
        }

        .accordion-icon {
            max-height: 20px;
        }
    }

    .rotate-icon {
        transform: rotate(45deg);
        transition: transform 0.3s ease-in-out;
    }

   .accordion-icon {
       transition: transform 0.3s ease-in-out;

   }
</style>


<div class="accordion-section" id="mw-accordion-module-<?php print $params['id'] ?>">
    <?php foreach ($json
                   as $key => $slide): ?>
        <?php
        $edit_field_key = $key;
        if (isset($slide['id'])) {
            $edit_field_key = $slide['id'];
        }

        ?>

        <div class="accordion-item">
            <button class="accordion-title" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>"
                    aria-expanded="true"
                    aria-controls="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" id="header-item-<?php print $edit_field_key ?>">
                <?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><h6 class="font-weight-bold me-auto mb-0"><?php print isset($slide['title']) ? $slide['title'] : ''; ?></h6>
                <svg class="accordion-icon plus-icon" xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
            </button>

            <div id="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" class="acordion-content-wrapper accordion-collapse collapse"
                 aria-labelledby="header-item-<?php print $edit_field_key ?>"
                 data-parent="#mw-accordion-module-<?php print $params['id'] ?>">
                <div class="accordion-content">
                    <div class="accordion-text">
                        <?php include modules_path() . 'accordion/templates/partials/render_accordion_item_content.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
