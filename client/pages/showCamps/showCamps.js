// pages/showCamps/showCamps.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    message: '',
    items: []
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    // var that = this
    // wx.request({
    //   url: 'https://wjjhol0l.qcloud.la/weapp/getcamps',
    //   success: function(res){

    //     that.setData({
    //       message:res.data.data.msg,
    //       items:res.data.data.list
    //     })
    //     console.log(res.data.data.list)
    //   }
    // })
    wx.login({
      success: function (res) {
        console.log(res.code)
        if (res.code) {
          wx.request({
            url: 'https://wjjhol0l.qcloud.la/weapp/onlogin',
            data: {
              code: res.code
            },
            success: function (res) {
              getApp().data.openid = res.data.openid
              console.log(res.data.openid)
            }
          })
        }
        else {
          console.log('获取用户登录态失败！' + res.errMsg)
        }
      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  },

  click: function (e) {
    var idx = parseInt(e.currentTarget.id)
    console.log(idx)
  }
})