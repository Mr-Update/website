<?php
  include('../engine/engine.inc');

  $page = new Page;
  $page->printHead(__('Translations instructions'), TAB_TRANSLATIONS);
  $instructions = $page->getContentFromHtmlFile('Translations.html', '#/winmerge/trunk/#si', '/winmerge/branches/' . $stablerelease = $page->getStableRelease()->getBranchName() . '/');
  if ($instructions == '') {
    $page->printHeading(__('Translations instructions'));
    $page->printPara(__('The translations instructions are currently not available...'));
  }
  else
    print($instructions);
?>
<p><em><?php __e('Source: %s', '<a href="https://bitbucket.org/winmerge/winmerge/src/' . $stablerelease = $page->getStableRelease()->getBranchName() . '/Docs/Developers/Translations.html">WinMerge\Docs\Developers\Translations.html</a>');?></em></p>
<?php
  $page->printFoot();
?>