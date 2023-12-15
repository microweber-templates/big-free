<?php if ($phone_text == 1): ?>
    <li class="nav-item dropdown btn-phone ps-3 my-xl-0 my-1">
        <div>
            <span class="text-outline-primary font-weight-bold">
                <a href="tel:<?php print $phone_text_value; ?>" class="nav-link text-decoration-none" style="font-size: 16px;">
                    <span class="mdi mdi-phone"></span>
                    <?php print $phone_text_value; ?>
                </a>
            </span>
        </div>
    </li>
<?php endif; ?>
