const path=require("path");
const HtmlWebpackPlugin=require("html-webpack-plugin");
module.exports={
    mode: "production ",
    entry: "./src/App.js",
    output:{
        path:path.resolve(__dirname,"dist"),
        filename:"output.js"
    },
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
     
}