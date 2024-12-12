const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  mode: 'production', // Ou 'development' para testes
  entry: './assets/scss/style.scss', // SCSS como entrada principal
  output: {
    path: path.resolve(__dirname, 'assets/css'), // Saída para CSS
    filename: 'index.js', // Arquivo vazio (Webpack exige um JS)
  },
  module: {
    rules: [
      {
        test: /\.scss$/, // Aplica a regra para arquivos .scss
        use: [
          MiniCssExtractPlugin.loader, // Extrai o CSS para um arquivo
          'css-loader', // Lê o CSS
          'sass-loader', // Compila SCSS para CSS
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(), // Limpa a pasta CSS antes de gerar o novo
    new MiniCssExtractPlugin({
      filename: 'style.css', // Gera o CSS final
    }),
  ],
};