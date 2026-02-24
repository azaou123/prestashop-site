{extends file='parent:_partials/header.tpl'}

{block name='header_banner'}
  {$smarty.block.parent}
  <div class="my-custom-banner" style="background: #24b9d7; color: white; text-align: center; padding: 10px; width: 100%;">
    My Custom Banner - Badr
  </div>
{/block}