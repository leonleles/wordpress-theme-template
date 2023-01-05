const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require( 'path' );

module.exports = {
    ...defaultConfig,
    entry: {
        ...defaultConfig.entry,
        theme: path.resolve(process.cwd(), 'src', 'theme', 'theme.js'),
    },
    module: {
        ...defaultConfig.module,
        rules: [
            ...defaultConfig.module.rules,
        ]
    }
};