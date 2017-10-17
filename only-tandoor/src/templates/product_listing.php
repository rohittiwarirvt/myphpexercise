<div class='menu-item menu-list-item'>
    <div class='row align-items-center'>
        <div class='col-sm-6 mb-2 mb-sm-0'>
            <h6 class='mb-0'><?php print $name; ?></h6>
            <span class='text-muted text-sm'><?php print $description; ?></span>
        </div>
        <div class='col-sm-6 text-sm-right'>
            <span class='text-md mr-4'><span class='text-muted'>from</span> Rs.<?php print $price; ?></span>
            <button class='btn btn-outline-secondary btn-sm' data-target='#productModal' data-toggle='modal' data-product-id="<?php print $id; ?>" data-product-price="<?php print $price; ?>" data-product-name="<?php print $name; ?>" data-product-description="<?php print $description; ?>"><span>Add to cart</span></button>
        </div>
    </div>
</div>

