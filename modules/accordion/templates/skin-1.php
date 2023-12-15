<?php

/*

  type: layout

  name: skin-1

  description: Skin-1 template


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
                .prev('.card-header')
                .find("i.mdi.arrow.sk1")
                .toggleClass('mdi-chevron-down mdi-chevron-up')
                .toggleClass('active')
        }
        $('#accordion-sk1').on('shown.bs.collapse', toggleChevron);
        $('#accordion-sk1').on('hidden.bs.collapse', toggleChevron);

        $(".card.sk1").click(function() {
            $(".card.sk1").removeClass("active");
            $(this).addClass("active");
        });
    })
</script>

<style>
    .card.sk1:hover,
    .card.active.sk1 {
        border: 1px var(--primaryColor) solid !important;
    }

    .card i.active.sk1 {
        background-color: var(--primaryColor) !important;
        color: white !important;
    }

    .card.sk1 {
        border: 1px solid #e6e6e6 !important;
        border-radius: 5px !important;
    }

    .mdi.arrow.sk1 {
        background-color: #f3f3f3;
        color: gray;
        line-height: 1 !important;
        font-size: 20px !important;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    .card.card-collapse .card-header:after {
        border-top: none !important;
    }
</style>

<div id="mw-accordion-module-<?php print $params['id'] ?>">
    <div class="accordion" id="accordion-sk1">
        <?php foreach ($json as $key => $slide) : ?>
            <?php
            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }

            ?>
            <div class="card sk1 card-collapse mb-3 <?php if ($key == 0) : ?> active_sk1 <?php endif; ?>" >
                <div class="card-header p-0" id="header-item-<?php print $edit_field_key ?>">
                    <button class="btn w-100 rounded-0 btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" aria-expanded="true" aria-controls="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>">
                        <?php //module icon -
                        //print isset($slide['icon']) ? $slide['icon'] . ' ' : '';
                        ?>
                        <h4> <?php print isset($slide['title']) ? $slide['title'] : ''; ?> </h4>
                        <i class="mdi arrow sk1 rounded-circle <?php if ($key == 0) : ?>mdi-chevron-down<?php else : ?>mdi-chevron-down <?php endif; ?>"></i>
                    </button>
                </div>

                <div   text-black collapse"  id="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" class="collapse <?php if ($key == 0) : ?> show <?php endif; ?>" aria-labelledby="header-item-<?php print $edit_field_key ?>" data-parent="#mw-accordion-module-<?php print $params['id'] ?>">
                    <div class="card-body px-5 pt-0 pb-5">
                        <div class="  edit" field="accordion-item-<?php print $edit_field_key ?>" rel="module-<?php print $params['id'] ?>">
                            <div class="element">
                                <h6 class="pt-3"> <?php print isset($slide['content']) ? $slide['content'] : 'Accordion content' ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
