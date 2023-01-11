const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
    ...defaultConfig,
    entry: {
        ...defaultConfig.entry(),
        public: path.resolve(process.cwd(), 'src', 'public'),
        admin: path.resolve(process.cwd(), 'src', 'admin')
    },
    module: {
        ...defaultConfig.module,
        rules: [
            ...defaultConfig.module.rules,
            {
                test: /\.ts(x?)$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'ts-loader',
                        options: {
                            configFile: 'tsconfig.json',
                            transpileOnly: true,
                        },
                    },
                ],
            },
        ]
    },
    resolve: {
        extensions: ['.ts', '.tsx', ...(defaultConfig.resolve ? defaultConfig.resolve.extensions || ['.js', '.jsx'] : [])],
    },
};