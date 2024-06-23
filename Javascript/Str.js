function LeftPad(str, len, ch) {
  return new Array(len - str.length).fill(!ch && ch !== 0 ? ' ' : ch).join("") + str
}

function RightPad(str, len, ch) {
  return str + new Array(len - str.length).fill(!ch && ch !== 0 ? ' ' : ch).join("")
}
