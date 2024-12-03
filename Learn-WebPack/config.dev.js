const path = require("path");
const HtmlWebpackPlugin=require("html-webpack-plugin");
module.exports = {
  mode: "development",
  entry: path.resolve(__dirname, "./src/App.js"),
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ["style-loader", "css-loader"],
      },
      {
        test: /\.(png|jpeg)$/i,
        type: "asset/resource",
        
      },
    ],
  },
  

  devServer: {
    static: {
      directory: path.join(__dirname, "dist"),
    },
    compress: true,
    port: 3500,
  },
  plugins:[
    new HtmlWebpackPlugin({
       filename:'index.html',
        template: './src/index.html'
    })
   
  ]
};
