const path = require('path');

module.exports = {
  entry: './assets/js/app.js',
  output: {
    filename: 'app.min.js',
    path: path.resolve(__dirname, 'assets/js')
  },
  mode: 'production',
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader']
      }
    ]
  }
};
