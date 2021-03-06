<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Deploy\Console\Command;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class DeployStaticOptions
 *
 * This class contains the list options and their related constants,
 * which must be used to refer to static content deployment CLI commands arguments.
 *
 * @api
 */
class DeployStaticOptions
{
    /**
     * Key for area option
     */
    const AREA = 'area';

    /**
     * Key for exclude area option
     */
    const EXCLUDE_AREA = 'exclude-area';

    /**
     * Key for theme option
     */
    const THEME = 'theme';

    /**
     * Key for exclude theme option
     */
    const EXCLUDE_THEME = 'exclude-theme';

    /**
     * Key for languages parameter
     */
    const LANGUAGE = 'language';

    /**
     * Key for exclude languages parameter
     */
    const EXCLUDE_LANGUAGE = 'exclude-language';

    /**
     * Use specific deployment strategy
     */
    const STRATEGY = 'strategy';

    /**
     * Key for jobs option
     */
    const JOBS_AMOUNT = 'jobs';

    /**
     * Force run of static deploy
     */
    const FORCE_RUN = 'force';

    /**
     * Symlink locale if it not customized
     */
    const SYMLINK_LOCALE = 'symlink-locale';

    /**
     * Key for javascript option
     */
    const NO_JAVASCRIPT = 'no-javascript';

    /**
     * Key for css option
     */
    const NO_CSS = 'no-css';

    /**
     * Key for fonts option
     */
    const NO_FONTS = 'no-fonts';

    /**
     * Key for images option
     */
    const NO_IMAGES = 'no-images';

    /**
     * Key for html option
     */
    const NO_HTML = 'no-html';

    /**
     * Key for html option
     */
    const NO_HTML_MINIFY = 'no-html-minify';

    /**
     * Key for misc option
     */
    const NO_MISC = 'no-misc';

    /**
     * Key for dry-run option
     *
     * @deprecated since 2.2.0
     */
    const DRY_RUN = 'dry-run';

    /**
     * Key for less option
     *
     * @deprecated since 2.2.0
     */
    const NO_LESS = 'no-less';

    /**
     * Default jobs amount
     */
    const DEFAULT_JOBS_AMOUNT = 0;

    /**
     * Key for languages parameter
     */
    const LANGUAGES_ARGUMENT = 'languages';

    /**
     * Deploy static command options list
     *
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function getOptionsList()
    {
        return [
            new InputOption(
                self::FORCE_RUN,
                '-f',
                InputOption::VALUE_NONE,
                'Deploy files in any mode.'
            ),
            new InputOption(
                self::NO_JAVASCRIPT,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy JavaScript files.'
            ),
            new InputOption(
                self::NO_CSS,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy CSS files.'
            ),
            new InputOption(
                self::NO_LESS,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy LESS files.'
            ),
            new InputOption(
                self::NO_IMAGES,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy images.'
            ),
            new InputOption(
                self::NO_FONTS,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy font files.'
            ),
            new InputOption(
                self::NO_HTML,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy HTML files.'
            ),
            new InputOption(
                self::NO_MISC,
                null,
                InputOption::VALUE_NONE,
                'Do not deploy files of other types (.md, .jbf, .csv, etc.).'
            ),
            new InputOption(
                self::NO_HTML_MINIFY,
                null,
                InputOption::VALUE_NONE,
                'Do not minify HTML files.'
            ),
            new InputOption(
                self::THEME,
                '-t',
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Generate static view files for only the specified themes.',
                ['all']
            ),
            new InputOption(
                self::EXCLUDE_THEME,
                null,
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Do not generate files for the specified themes.',
                ['none']
            ),
            new InputOption(
                self::LANGUAGE,
                '-l',
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Generate files only for the specified languages.',
                ['all']
            ),
            new InputOption(
                self::EXCLUDE_LANGUAGE,
                null,
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Do not generate files for the specified languages.',
                ['none']
            ),
            new InputOption(
                self::AREA,
                '-a',
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Generate files only for the specified areas.',
                ['all']
            ),
            new InputOption(
                self::EXCLUDE_AREA,
                null,
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Do not generate files for the specified areas.',
                ['none']
            ),
            new InputOption(
                self::JOBS_AMOUNT,
                '-j',
                InputOption::VALUE_OPTIONAL,
                'Enable parallel processing using the specified number of jobs.',
                self::DEFAULT_JOBS_AMOUNT
            ),
            new InputOption(
                self::SYMLINK_LOCALE,
                null,
                InputOption::VALUE_NONE,
                'Create symlinks for the files of those locales, which are passed for deployment, '
                . 'but have no customizations'
            ),
            new InputOption(
                self::STRATEGY,
                '-s',
                InputOption::VALUE_OPTIONAL,
                'Deploy files using specified strategy.',
                'quick'
            ),
            new InputArgument(
                self::LANGUAGES_ARGUMENT,
                InputArgument::IS_ARRAY,
                'Space-separated list of ISO-636 language codes for which to output static view files.'
            ),
        ];
    }
}
