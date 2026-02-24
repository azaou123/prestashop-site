{extends file='parent:catalog/product.tpl'}

{block name='product_description_short'}
  <div style="background: yellow; padding: 20px; margin: 20px 0; border: 5px solid red;">
    <strong>TEST OVERRIDE - THIS SHOULD BE VISIBLE</strong>
  </div>

  {$smarty.block.parent}
{/block}
