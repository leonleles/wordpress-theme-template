const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
    ...defaultConfig,
    entry: {
        ...defaultConfig.entry(),
        theme: path.resolve(process.cwd(), 'src', 'theme', 'theme.js'),
        public: path.resolve(process.cwd(), 'src', 'public', 'public.js')
    },
    module: {
        ...defaultConfig.module,
        rules: [
            ...defaultConfig.module.rules,
        ]
    }
};