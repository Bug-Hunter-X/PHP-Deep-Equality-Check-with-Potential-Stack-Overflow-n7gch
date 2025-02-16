function foo(a, b) {
  if (a === b) {
    return true;
  }
  if (typeof a !== 'object' || typeof b !== 'object') {
    return false; 
  }
  if (Object.keys(a).length !== Object.keys(b).length) {
    return false;
  }
  for (let key in a) {
    if (!b.hasOwnProperty(key) || !foo(a[key], b[key])) {
      return false; 
    }
  }
  return true; 
}