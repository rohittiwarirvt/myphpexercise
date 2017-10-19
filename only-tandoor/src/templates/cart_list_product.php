<tr data-cart-product='{"line_item_id": "<?php print $line_item_id; ?>"}'>
    <td class="title">
        <span class="name"><a href="#productModal" data-toggle="modal"><?php print $product_name; ?></a></span>
        <span class="caption text-muted"><?php print $product_description; ?></span>
    </td>
    <td class="quantity"> <?php print $quantity; ?></td>
    <td class="price">Rs. <?php print $unit_price; ?></td>
    <td class="actions">
        <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
        <a href="#" class="action-icon remove-item"><i class="ti ti-close"></i></a>
    </td>
</tr>
