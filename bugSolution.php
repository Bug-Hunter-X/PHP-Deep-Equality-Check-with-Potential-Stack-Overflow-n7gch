function foo(a, b) {
  const stack = [[a, b]];
  while (stack.length > 0) {
    const [currentA, currentB] = stack.pop();
    if (currentA === currentB) {
      continue; 
    }
    if (typeof currentA !== 'object' || typeof currentB !== 'object' || currentA === null || currentB === null) {
      return false; 
    }
    const keysA = Object.keys(currentA);
    const keysB = Object.keys(currentB);
    if (keysA.length !== keysB.length) {
      return false;
    }
    for (let key of keysA) {
      if (!currentB.hasOwnProperty(key)) {
        return false; 
      }
      stack.push([currentA[key], currentB[key]]);
    }
  }
  return true;
}