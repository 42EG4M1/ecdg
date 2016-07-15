const dir = {
  src  : './src/assets/',
  dest : './dist/assets/'
}


module.exports = {
  
  
  root: {
    src   : './src/',
    dest  : './dist/'
  },
  
  
  sass: {
    src   : `${dir.src}styles/**/*.scss`,
    dest  : `${dir.dest}styles/`,
    watch : `${dir.src}styles/**/*.scss`
  },
  
  
  js: {
    src   : `${dir.src}scripts/*.js`,
    dest  : `${dir.dest}scripts/`,
    watch : `${dir.src}scripts/*.js`
  },
  
  
  images: {
    src   : `${dir.src}images/**/*.+(jpg|jpeg|png|gif|svg)`,
    dest  : `${dir.dest}images/`,
    watch : `${dir.src}images/**/*.+(jpg|jpeg|png|gif|svg)`
  },
  
  
  copy: {
    src   : './src/*.+(html|css|php|png)',
    dest  : './dist/',
    watch : './src/*.+(html|css|php|png)'
  }
  
  
//  default: {
//    depends : ['watch']
//  }

};