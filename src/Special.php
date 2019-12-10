<?php
// namespace MediaWiki\Extension\WikiScoop;
// use MediaWiki\SpecialPage;

/**
 * WikiScoop Special Page
 * Aliases for Special:WikiScoop
 * https://www.mediawiki.org/wiki/Manual:Special_pages
 * https://www.mediawiki.org/wiki/Manual:Special_pages#The_special_page_file
 * https://doc.wikimedia.org/mediawiki-core/1.29.0/php/classSpecialPage.html
 *
 * @file
 * @ingroup Extensions
 * @version 1.0
 * @author Alexander Yukal <yukal@email.ua>
 * @license https://opensource.org/licenses/MIT MIT License
 */

class SpecialWikiScoop extends SpecialPage {
    /**
     * __construct
     * @see https://doc.wikimedia.org/mediawiki-core/1.29.0/php/classSpecialPage.html#ae9deb76f4b3ab28b834e3206491e2322
     *
     * @param  string $name Name of the special page, as seen in links and URLs
     * @param  string $restriction User right required, e.g. "block" or "delete
     * @param  bool $listed Whether the page is listed in Special:Specialpages
     * @param  callable|bool $function Unused
     * @param  string $file Unused
     * @param  bool $includable Whether the page can be included in normal pages
     *
     * @return void
     */
    function __construct($name='', $restriction='', $listed=true, $function=false, $file='', $includable=false) {
        parent::__construct( 'WikiScoop' );
    }

    /**
     * execute
     * @see https://doc.wikimedia.org/mediawiki-core/1.29.0/php/classSpecialPage.html#adaa2cce21133f53bdbdb306cfbda20a4
     *
     * @param  string|null $par The subpage component of the current title
     *
     * @return void
     */
    function execute( $par ) {
        $request = $this->getRequest();
        $output = $this->getOutput();
        $this->setHeaders();

        # Get request data from, e.g.
        $param = $request->getText( 'param' );

        # Do stuff
        # ...
        $wikitext = 'Hello world!';
        $output->addWikiText( $wikitext );
    }

    /**
     * getGroupName
     *
     * @inheritDoc
     *
     * @return string
     */
    protected function getGroupName() {
        return 'media';
    }
}
