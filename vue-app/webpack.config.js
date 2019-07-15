let webpack = require('webpack');
let path = require('path');

module.exports = {
    entry:  {
        app: './resources/js/app.js',
    },
    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: "[name].js",
        publicPath: "./public"
    },

    resolve: {
        alias: {
            'vue$' : 'vue/dist/vue.common.js'
        }
    },

    optimization: {
        splitChunks: {
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/](vue|axios)[\\/]/,
                    name: 'vendor',
                    chunks: 'all',
                }
            }
        }
    }
};

if (process.env.NODE_ENV === 'production') {
    module.exports.plugins.push(
        new webpack.DefinePlugin({
            'process.env' : {
                NODE_ENV: 'production'
            }
        })
    );
}